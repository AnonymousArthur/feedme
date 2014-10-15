-- Select only the sql query to execute. Do not try to import this file into database.

-- Fetch User data by given name. For example: user 'a'
SELECT * FROM USERS WHERE USER_NAME = 'a';

-- Fetch Restaurants data by given id. For example: restaurant 1
SELECT * FROM RESTAURANTS WHERE RESTAURANT_ID = 1;

-- Fetch Tags data by given id.
SELECT * FROM TAGS WHERE TAG_ID = 1;

-- Fetch all photos information belongs to an restaurants by given restaurant id. For example restaurant 1
SELECT * FROM PHOTOS,RESTAURANTS_PHOTOS WHERE RESTAURANT_ID = 1 AND RESTAURANTS_PHOTOS.PHOTO_ID=PHOTOS.PHOTO_ID;

-- Fetch user's preferences information by given user id. For example: user 1
SELECT * FROM USERS,USERS_PREFERENCES,PREFERENCES WHERE USERS.USER_ID = 1 AND USERS_PREFERENCES.PREFERENCE_ID = PREFERENCES.PREFERENCE_ID AND USERS_PREFERENCES.USER_ID = USERS.USER_ID;

-- Fetch restaurants information by given perference id. For example: preference id = 1
SELECT * FROM RESTAURANTS,RESTAURANTS_PREFERENCES,PREFERENCES WHERE RESTAURANTS_PREFERENCES.PREFERENCE_ID = 1 AND PREFERENCES.PREFERENCE_ID = RESTAURANTS_PREFERENCES.PREFERENCE_ID AND RESTAURANTS.RESTAURANT_ID = RESTAURANTS_PREFERENCES.RESTAURANT_ID;

-- Fetch user's rating for given restaurant id. For example: user id =1,restaurant id = 1;
SELECT * FROM USER_RATINGS WHERE USER_ID = 1 AND RESTAURANT_ID = 1;

-- Fetch restaurants information by given place filter. For example, restaurant in Upper campus
SELECT * FROM RESTAURANTS WHERE UPPER(LOCATION) LIKE UPPER('upper campus');
