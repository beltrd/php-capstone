<?php
/**
 *Description: model for category
 *@file category_model.php
 *@author Diego Beltran <beltrd@gmail.com>
 *@created_at 2018-09-11
 **/

/**
 * @param $dbh
 * @return array list of categories
 */
function getCategories($dbh){
  // query
  $query = "SELECT
            DISTINCT
            category_id,
            name
            FROM
            category
            JOIN product USING(category_id)
            ORDER BY
            name ASC";
  $stmt = $dbh->prepare($query);

  $stmt->execute();

  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * @param $dbh
 * @return array list of countries
 */
function getCountries($dbh)
{
  // query
  $query = "SELECT * FROM country_of_origin";
  
  $stmt = $dbh->prepare($query);

  $stmt->execute();

  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
