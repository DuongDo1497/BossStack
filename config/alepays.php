<?php

return [

//    "apiKey" => "BHwRikyqEhVPv0hozqXlaXLvdrUF79", //Key test
//    "encryptKey" => "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCCvMNctyN1JyCM7Lp1e9a35/yZn8LVzGGC08EXKq+CVq3/C7ao771OVFQ1+E+OFTmRfCfTs+BkJPGlGWC+ktpk/oMKI+4oMP/R1W2kP1cPGe0LPMc1KsczsG4JDFZ4kBZJm0SmXoFo1XTMojt36WK/6/fIVLnUnaxsP0nBOlE0mwIDAQAB", //Ma hoa test
//    "checksumKey" => "FRxan2odspMHcN7JbNUoN21ZUoxUyR", //Checksum test
    "apiKey" => "7EwqKJL5Uti3d7atGfNHnLQT2qUoO8", //Là key dùng để xác định tài khoản nào đang được sử dụng.
    "encryptKey" => "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCLARZMuiRdLmMEpcPY7nRrk9Dy24XaYg3PRZgHlS7R/GEgOaHJ7b/bPIY8AKET+JZcG/OzA6d17+dp8b4aAuDm1D95grdvUbTYsx0dr11mmBry9/rrdHba9MKSIqw2hpEW20SpcHWb5wBSzCyZJmzIfqGW/B5VxsIYfrBxbOLXCQIDAQAB", //Là key dùng để mã hóa dữ liệu truyền tới Alepay.
    "checksumKey" => "iyDVR8qyg3T77Mkz0rdFd4cnuk5dk9", //Là key dùng để tạo checksum data. 
    "test" => "https://alepay-v3-sandbox.nganluong.vn/api/v3/checkout/",
    "live" => "https://alepay-v3.nganluong.vn/api/v3/checkout/",
    "url_request_payment" => "https://alepay-v3.nganluong.vn/api/v3/checkout/request-payment",
    "url_get_transaction_info" => "https://alepay-v3.nganluong.vn/api/v3/checkout/get-transaction-info",                  
];