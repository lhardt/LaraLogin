CreateUsersTable: create table `users` (`id` bigint unsigned not null auto_increment primary key, `name` varchar(255) not null, `email` varchar(255) not null, `email_verified_at` timestamp null, `password` varchar(255) not null, `remember_token` varchar(100) null, `created_at` timestamp null, `updated_at` timestamp null) default character set utf8mb4 collate 'utf8mb4_unicode_ci'
CreateUsersTable: alter table `users` add unique `users_email_unique`(`email`)
CreatePasswordResetsTable: create table `password_resets` (`email` varchar(255) not null, `token` varchar(255) not null, `created_at` timestamp null) default character set utf8mb4 collate 'utf8mb4_unicode_ci'
CreatePasswordResetsTable: alter table `password_resets` add index `password_resets_email_index`(`email`)
CreateFailedJobsTable: create table `failed_jobs` (`id` bigint unsigned not null auto_increment primary key, `uuid` varchar(255) not null, `connection` text not null, `queue` text not null, `payload` longtext not null, `exception` longtext not null, `failed_at` timestamp default CURRENT_TIMESTAMP not null) default character set utf8mb4 collate 'utf8mb4_unicode_ci'
CreateFailedJobsTable: alter table `failed_jobs` add unique `failed_jobs_uuid_unique`(`uuid`)