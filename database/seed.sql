USE `noxara_Jaka22`;
INSERT INTO users(username,email,phone,password_hash,role,status,referral_code,created_at,updated_at) VALUES
('admin','admin@noxara.page','628111111111', '$2y$10$M35JxMLe1dFLLV8M1QxCbOB6X/52nSuU0xkXz8fLKJA14DLvR6abG','admin','active','NOXADMIN',NOW(),NOW()),
('demo','demo@noxara.page','628222222222', '$2y$10$M35JxMLe1dFLLV8M1QxCbOB6X/52nSuU0xkXz8fLKJA14DLvR6abG','user','active','NOXDEMO',NOW(),NOW());
INSERT INTO balance_accounts(user_id,main_balance,bonus_balance,profit_balance,commission_balance,locked_balance,total_profit,created_at,updated_at)
SELECT id,100000,15000,0,0,0,0,NOW(),NOW() FROM users;
INSERT INTO site_settings(code,data,status,created_at,updated_at) VALUES
('app_meta', JSON_OBJECT('name','NOXARA','url','https://noxara.page','theme','teal-ocean'),'active',NOW(),NOW());
