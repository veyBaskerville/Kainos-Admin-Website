<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>quick fix for this error</h1>
    <p>----------------------------------------------------------------------------------

Route [dashboard] not defined. (View: /home/runner/work/Kainos-Admin-Website/Kainos-Admin-Website/resources/views/components/layouts/app/sidebar.blade.php) (View: /home/runner/work/Kainos-Admin-Website/Kainos-Admin-Website/resources/views/components/layouts/app/sidebar.blade.php) (View: /home/runner/work/Kainos-Admin-Website/Kainos-Admin-Website/resources/views/components/layouts/app/sidebar.blade.php)

  at tests/Feature/Settings/ProfileUpdateTest.php:9
      5▕ 
      6▕ test('profile page is displayed', function () {
      7▕     $this->actingAs($user = User::factory()->create());
      8▕ 
  ➜   9▕     $this->get('/settings/profile')->assertOk();
     10▕ });
     11▕ 
     12▕ test('profile information can be updated', function () {
     13▕     $user = User::factory()->create();


  Tests:    13 failed, 14 passed (49 assertions)
  Duration: 8.15s

Error: Process completed with exit code 2.</p>
</body>
</html>