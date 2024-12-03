sudo iptables -I INPUT 6 -m state --state NEW -p tcp --dport 80 -j ACCEPT

sudo iptables -I INPUT 6 -m state --state NEW -p tcp --dport 443 -j ACCEPT

sudo iptables -I INPUT 6 -m state --state NEW -p udp --dport 51820 -j ACCEPT

sudo netfilter-persistent save

# super permissive below
# sudo iptables -P INPUT ACCEPT
# sudo iptables -P OUTPUT ACCEPT
# sudo iptables -P FORWARD ACCEPT
# sudo iptables -F
# sudo netfilter-persistent save