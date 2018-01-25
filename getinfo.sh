#!/bin/bash

user=$(ls -1 /home)

disk=$(fdisk -l |grep Disk |grep sectors |awk {'print $2,$3,$4'})

mem=$(expr $(cat /proc/meminfo  |grep -i memtotal |awk {'print $2'}) / 1024)

cores=$(cat /proc/cpuinfo |grep processor |wc -l)

cpu=$(cat /proc/cpuinfo |grep -i "model name" |cut -f2 -d":" |cut -c 2- |head -1)

hostname=$(hostname)

release=$(lsb_release -a)

echo "
user: $user

hostname: $hostname

disco: 
$disk

cpu: x $cores - $cpu

mem: $mem Mb

release: $release

" > /tmp/$hostname.txt

ifconfig -a >> /tmp/$hostname.txt

mkdir /mnt/getinfo

mount //192.168.13.41/share /mnt/getinfo -o username=possible,password=possible

mv /tmp/$hostname.txt /mnt/getinfo/

umount /mnt/getinfo

rm -rf /mnt/getinfo
