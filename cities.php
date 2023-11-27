<!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP gyakurlat</title>
</head>
<body>
    <form>
    <label for="countyDropdown">Megye:</label>
    <select id="countyDropdown"
    name="countyDropdown">
        <option value="">Válassz megyét</option>
        <?php
        require_once('ItemRepository.php');

        $itemRepository = new ItemRepository();
        $counties = $itemRepository->getAllcounties();

        foreach ($counties as $county) {
            echo ' <option value"'. $county['id']
            . '">' . $county['name'] . '<option>';
        }
        ?>
    </select>
    <br>
</body>
</html>