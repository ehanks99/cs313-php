CREATE TABLE Topic
(
    topic_id        INTEGER,
    topic_name      VARCHAR(50)         CONSTRAINT nn_topic_1 NOT NULL,
    CONSTRAINT pk_topic_id PRIMARY KEY(topic_id)
);

CREATE SEQUENCE topic_s1 START WITH 1;

--------------------------------------

INSERT INTO Topic VALUES (nextval('topic_s1'), 'Faith');
INSERT INTO Topic VALUES (nextval('topic_s1'), 'Sacrifice');
INSERT INTO Topic VALUES (nextval('topic_s1'), 'Charity');

CREATE TABLE Topic_to_Scriptures
(
    topic_to_scriptures_id     INTEGER,
    topic_id                   INTEGER      CONSTRAINT nn_topic_to_scriptures_1 NOT NULL,
    scriptures_id              INTEGER      CONSTRAINT nn_topic_to_scriptures_2 NOT NULL,
    CONSTRAINT pk_topic_to_scriptures PRIMARY KEY(topic_to_scriptures_id),
    CONSTRAINT fk_topic_to_scriptures_1 FOREIGN KEY(topic_id) REFERENCES Topic(topic_id),
    CONSTRAINT fk_topic_to_scriptures_2 FOREIGN KEY(scriptures_id) REFERENCES Scriptures(id)
);

CREATE SEQUENCE topic_to_scriptures_s1 START WITH 1;

