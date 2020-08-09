#!/bin/bash

cp -rvf public/images live/images

echo "Live editing BASIC AUTH"

read -p "Username: " username

echo "${username}:"$(mkpasswd -m sha-512) >> live/.htpasswd

