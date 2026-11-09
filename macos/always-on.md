# Always-on MacBook Pro

How the MacBook Pro (M4, `Mac16,1`) is set up to stay awake on the office desk
with the lid closed, so scheduled launchd jobs keep running. Set up 2026-11-10.

The only real cost of running a laptop like this is battery ageing: a lithium
battery held at 100% (and warm) wears much faster. Heat at idle is a non-issue
on Apple Silicon; avoid long heavy loads (builds, video) with the lid closed.

## Battery: cap charging at 80% (AlDente)

macOS "Optimized Battery Charging" learns a routine and does little on a Mac
that never leaves the charger, so the cap is set explicitly.

```sh
brew install --cask aldente
```

- Allow the helper on first launch (admin password); without it nothing is enforced
- Menu bar → charge limit slider → **80**
- Settings → **Launch at Login** on, or a reboot quietly charges to 100% again
- **Discharge** drains to the cap while plugged in; **Top Up** charges to 100% once before travelling

## Stay awake with the lid closed, only on AC (Amphetamine)

Amphetamine 5.3.2. A trigger, not a manual session, so unplugging ends it and
the Mac sleeps normally (e.g. in a bag).

- Settings → **Triggers** → enable triggers → **+**
  - Name: `Awake on AC`
  - Criteria: **Power Adapter** connected
  - Allow display sleep: on; allow system sleep when display is closed: off
- End any manual session (**End Current Session**). A manual "Indefinitely"
  session overrides the trigger and keeps the Mac awake off the charger
- Settings → **Notifications** → Closed-Display Mode warnings on

Do **not** install **Power Protect**. It does the opposite of what is wanted
here: it keeps a closed-display session alive across power connect/disconnect,
and it installs a sudoers entry so `pmset -a disablesleep 0|1` runs without a
password.

The fail-safe is the separate **Amphetamine Enhancer** app (same developer,
GitHub `x74353/Amphetamine-Enhancer`) → **Closed-Display Mode Fail-Safe**. It
puts the Mac back to normal sleep if Amphetamine crashes mid-session. Optional
insurance; the trigger alone covers the normal case.

Check:

```sh
pmset -g assertions | grep -i amphetamine
# expect: "Amphetamine (Trigger - System)" while on AC, nothing on battery
defaults read com.if.Amphetamine "Trigger Data"
# expect: Enabled = 1; RequireAC = 1; AllowSysSleepOnClsdDisp = 0
```

## Scheduled wake (pmset)

Belt and braces for when the Mac is asleep anyway (unplugged, rebooted): wake
two minutes before the 07:00 launchd jobs. launchd runs a missed calendar job
on the next wake, but only then.

```sh
sudo pmset repeat wakeorpoweron MTWRFSU 06:58:00
pmset -g sched                 # "wakepoweron at 6:58AM every day"
sudo pmset repeat cancel       # remove (clears every repeating event)
```

Lid closed on battery may not wake at all.
