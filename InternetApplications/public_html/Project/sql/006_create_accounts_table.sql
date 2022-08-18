CREATE TABLE Accounts 

(
    id int auto_increment,
    account_number varchar(12) NOT NULL,
    user_id int,
    balance decimal(12, 2) default 0.00, 
    account_type varchar(20), 
    created TIMESTAMP default CURRENT_TIMESTAMP,
    modified TIMESTAMP default CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES Users (id) 

)