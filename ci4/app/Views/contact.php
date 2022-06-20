<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>
    <div class="container">
        <form action="action_page.php">
          <label for="fname">Name</label>
          <input type="text" id="name" name="name" placeholder="Your name..">
          <label for="lname">Email</label>
          <input type="text" id="email" name="email" placeholder="Your email..">      
          <label for="province">Province</label>
          <select id="province" name="province">
            <option value="jabar">Jawa Barat</option>
            <option value="jateng">Jawa Tengah</option>
            <option value="jatim">Jawa Timur</option>
            <option value="kalbar">Kalimantan Barat</option>
            <option value="kaltim">Kalimantan Timur</option>
          </select>
          <label for="subject">Message</label>
          <textarea id="subject" name="message" placeholder="Write something.." style="height:200px"></textarea>
          <input type="submit" value="Submit">      
        </form>
      </div>   
    <?= $this->include('template/footer'); ?>
</body>
</html>
