
# tmux send-keys right
tsr() {
    args=$*
    tmux send-keys -t left "$args" C-m
}

# tmux send-keys left
tsl() {
    args=$*
    tmux send-keys -t left "$args" C-m
}

# nts : "Note to self"
nts() {
    args=$$
    mutt -s "$args" yonghunbyun@gmail.com < /dev/null
}

