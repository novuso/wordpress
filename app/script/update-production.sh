#!/usr/bin/env bash

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
DEVOPS_DIR=$SCRIPT_DIR/../devops

ansible-playbook -i $DEVOPS_DIR/inventories/production $DEVOPS_DIR/update.yml --ask-sudo-pass --ask-vault-pass
