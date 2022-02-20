#!/usr/bin/env bash

# Import files containing parameters.
. _parameters.sh
if [ -e _overrides.sh ]
then . _overrides.sh
fi

# Constants
YES="YES"
NO="NO"

# Parameters extraction functions.
extract_yesno() {
  VAR_NAME=$1
  VAR_VALUE="${!VAR_NAME}"
  case "${VAR_VALUE}" in
    "YES"|"YEs"|"YeS"|"Yes"|"yES"|"yEs"|"yeS"|"yes") echo ${YES};;
    "NO"|"No"|"nO"|"no") echo ${NO};;
    *) echo "Parameter '${VAR_NAME}' has a wrong value. Available values are just 'YES' or 'NO', but actual is '${VAR_VALUE}'"
      exit 1
    ;;
  esac
}

# Parameters validation and normalization.
INVALID=0
LOGIN=$(extract_yesno "LOGIN")
if [ $? -ne 0 ]
then echo "${LOGIN}" ; INVALID=1
fi

# If not all of the parameters valid, prevent continuing of the script execution.
if [ $INVALID -ne 0 ]
then echo "Script execution had been stopped because of invalid parameters (see above). Fix them in _parameters.sh or _overrides.sh" ; exit 1
fi

# Login
if [ "${LOGIN}" = ${YES} ]
then az login
fi

# Create the resource group
az group create -l "${LOCATION}" -n "${GROUP}"
