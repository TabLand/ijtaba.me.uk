#!/bin/bash
cat /proc/uptime | awk '{print $1}'
