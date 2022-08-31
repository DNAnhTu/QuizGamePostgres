CREATE TABLE multiple_choices (
  id INT NOT NULL,
  question varchar(200) NOT NULL,
  ans1 varchar(50) NOT NULL,
  ans2 varchar(50) NOT NULL,
  ans3 varchar(50) NOT NULL,
  ans4 varchar(50) NOT NULL,
  correct_ans1 INT NOT NULL,
  correct_ans2 INT NOT NULL,
  correct_ans3 INT NOT NULL,
  correct_ans4 INT NOT NULL,
  difficulty varchar(50) NOT NULL,
  onhold INT NOT NULL
);

ALTER TABLE multiple_choices ADD PRIMARY KEY (id);

CREATE TABLE one_choice (
  id INT NOT NULL,
  question varchar(200) NOT NULL,
  ans1 varchar(50) NOT NULL,
  ans2 varchar(50) NOT NULL,
  ans3 varchar(50) NOT NULL,
  ans4 varchar(50) NOT NULL,
  correct_answear varchar(50) NOT NULL,
  difficulty varchar(50) NOT NULL,
  onhold INT NOT NULL
);

ALTER TABLE one_choice ADD PRIMARY KEY (id);

CREATE TABLE text_completion (
  id INT NOT NULL,
  question varchar(200) NOT NULL,
  answear varchar(50) NOT NULL,
  difficulty varchar(50) NOT NULL,
  onhold INT NOT NULL
);

ALTER TABLE text_completion ADD PRIMARY KEY (id);

CREATE TABLE true_false (
  id INT NOT NULL,
  question varchar(200) NOT NULL,
  answear INT NOT NULL,
  difficulty varchar(50) NOT NULL,
  onhold INT NOT NULL
);

ALTER TABLE true_false ADD PRIMARY KEY (id);

CREATE TABLE users (
  id INT NOT NULL,
  name varchar(100) NOT NULL,
  lastname varchar(100) NOT NULL,
  date date NOT NULL,
  sex varchar(50) NOT NULL,
  username varchar(100) NOT NULL,
  password varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  photo varchar(1000) NOT NULL,
  role varchar(50) NOT NULL
);

ALTER TABLE users ADD PRIMARY KEY (id);

CREATE TABLE users_history (
  id INT NOT NULL,
  username varchar(100) NOT NULL,
  date date NOT NULL,
  difficulty varchar(50) NOT NULL,
  score INT NOT NULL
);
