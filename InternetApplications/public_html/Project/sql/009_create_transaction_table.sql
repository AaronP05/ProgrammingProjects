CREATE TABLE Transactions
(
    id int auto_increment,
    act_src_id  int NOT NULL,
    act_dest_id int NULL,
    balance_change decimal(12, 2),
    transaction_type varchar(10),
    memo TEXT default null,
    expected_total decimal(12, 2),
    created datetime default current_timestamp,
    modified TIMESTAMP default CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (act_src_id) references Accounts (id),
    FOREIGN KEY (act_dest_id) references Accounts (id)

   )
