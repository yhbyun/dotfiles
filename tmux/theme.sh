# ----------------------
# set some pretty colors
# ----------------------
# colorize messages in the command line
set -g message-style bg=default,fg=brightred #base02
set -g message-command-style bg=black,fg=blue

# ----------------------
# Panes
# -----------------------

set -g pane-border-style bg=default,fg=colour244
set -g pane-active-border-style bg=default,fg=colour202
setw -g pane-border-status top
setw -g pane-border-format  " \"#{pane_current_path}\" - \"#{pane_current_command}\" "

# ----------------------
# Status Bar
# -----------------------
set -g status on

set -g status-interval 5
set -g status-justify left
set -g status-position bottom

# set color for status bar
set -g status-style bg=default,fg=default

setw -g window-status-format "#I #W #[bg=default]#{?window_activity_flag,#{?window_bell_flag,#[fg=brightred]▲,#[fg=colour243]⦁},#[fg=colour238]⦁}#[bg=default]"
setw -g window-status-current-format "#I #{?window_zoomed_flag,#[fg=yellow][ #W ],#W}#[bg=default]"
# setw -g window-status-style bg=default,fg=colour237
setw -g window-status-activity-style bg=default,fg=colour243
setw -g window-status-bell-style bg=default,fg=brightred
setw -g window-status-current-style bg=default,fg=colour004

# show session name, window & pane number, date and time on left side of
# status bar
set -g status-left-length 70
set -g status-left "#[fg=colour237]#{?client_prefix,#[fg=colour202],#[fg=colour245]}#S #[fg=colour237] "

# show default node version, battery status, wifi name & date time
status_prefix="#{?client_prefix,#[fg=colour202]#(echo $(tmux show-option -gqv prefix | tr \"[:lower:]\" \"[:upper:]\" | sed 's/C-/\^/')) #[fg=colour237]⦁ ,}"
status_php_version='#[fg=colour237]#[fg=#649C62]#(~/.dotfiles/tmux/scripts/tmux-php-version) #[fg=colour237]⦁ '
status_node_version='#[fg=colour237]#[fg=#649C62]#(~/.dotfiles/tmux/scripts/tmux-nodenv-node-version) #[fg=colour237]⦁ '
status_battery='#(battery -t -p -G) #[fg=colour237]⦁ '
status_wifi="#[fg=colour237]#[fg=colour243]#(~/.dotfiles/tmux/scripts/tmux-wifi)"
# for some reason that extra space at the end prevents the date from overlaping & makes it play nice with Nerd Fonts
status_date_time="#[fg=colour237]#[fg=colour243]%A, %d %b %Y %H:%M#[fg=colour237] "

set -g status-right-length 300
set -g status-right "${status_prefix}${status_php_version}${status_node_version}${status_battery}${status_wifi}${status_date_time}"

