
-- get the location name and image card
SELECT
    `location`,
    `card_pic`,
    `id_tour_operator`
FROM
    `destinations`
GROUP BY `location`


-- get operator parallax image and destination name
SELECT
    `location`,
    `parallax_1`,
    `parallax_2`
FROM
    `destinations`
WHERE `location` = "Canada"


-- get tour operator details for a destination
SELECT
    *
FROM
    `tour_operators`
INNER JOIN `destinations`

ON tour_operators.id = destinations.id_tour_operator
WHERE location = "Canada"
    





