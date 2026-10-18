alias reload!='. ~/.zshrc'

alias cls='clear' # Good 'ol Clear Screen command

# tig
alias ts="tig status"

# docker
alias dc="docker compose"

# git
alias gic="git commit --allow-empty -m '[empty] Initial commit'"

# osx
alias u-netstat="lsof -Pn -i4|grep LISTEN"

# file system (from omarchy: basecamp/omarchy default/bash/aliases)
if command -v eza &> /dev/null; then
  alias ls='eza -lh --group-directories-first --icons=auto'
  alias lsa='ls -a'
  alias lt='eza --tree --level=2 --long --icons --git'
  alias lta='lt -a'
  alias lls="eza --icons --grid --group-directories-first"
fi
alias ff="fzf --preview 'bat --style=numbers --color=always {}'"
alias eff='${EDITOR:-nvim} "$(ff)"'

# tools (from omarchy)
n() { if [ "$#" -eq 0 ]; then command nvim . ; else command nvim "$@"; fi; }
alias t='tmux attach || tmux new -s Work'
