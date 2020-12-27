<?php
$password = $_POST["password"]; # in our current example, this will be 'supersecret'

if ($password == "23042001") {
  http_response_code(201); # return 201 "Created"
} else {
  http_response_code(404); # return 404 "Not Found"
}
?>
