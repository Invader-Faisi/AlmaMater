<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alma Mater</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-background font-roboto">
  <header class="bg-primary text-white p-6">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-3xl font-bold">Alma Mater</h1>
      <nav>
        <ul class="flex space-x-4">
          <li><a href="#features" class="hover:underline">Features</a></li>
          <li><a href="#modules" class="hover:underline">Modules</a></li>
          <li><a href="#contact" class="hover:underline">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="container mx-auto p-6">
    <section class="text-center my-12">
      <h2 class="text-4xl font-bold mb-6">Welcome to Our School Management System</h2>
      <p class="text-lg text-gray-700">Efficiently manage all school operations with our comprehensive system</p>
      <button class="bg-button text-white py-3 px-6 rounded mt-4 hover:bg-blue-700">Get Started</button>
    </section>

    <section id="features" class="my-12">
      <h3 class="text-2xl font-bold mb-4">Key Features</h3>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white p-6 shadow rounded">
          <h4 class="text-xl font-bold mb-2">User Management</h4>
          <p>Manage student, teacher, and parent accounts with ease.</p>
        </div>
        <div class="bg-white p-6 shadow rounded">
          <h4 class="text-xl font-bold mb-2">Admission Facility</h4>
          <p>Simplify the admission process with online applications and tracking.</p>
        </div>
        <div class="bg-white p-6 shadow rounded">
          <h4 class="text-xl font-bold mb-2">Class Management</h4>
          <p>Create and manage class schedules efficiently.</p>
        </div>
        <!-- Add more features as needed -->
      </div>
    </section>

    <section id="modules" class="my-12">
      <h3 class="text-2xl font-bold mb-4">Modules</h3>
      <div>
        <div class="bg-white p-6 shadow rounded mb-6">
          <h4 class="text-xl font-bold mb-2">Admin Module</h4>
          <ul class="list-disc pl-6">
            <li>User Management</li>
            <li>System Settings</li>
            <li>Class Management</li>
            <li>Communication</li>
            <li>Reports and Analytics</li>
            <!-- Add more items as needed -->
          </ul>
        </div>
        <div class="bg-white p-6 shadow rounded mb-6">
          <h4 class="text-xl font-bold mb-2">Teacher Module</h4>
          <ul class="list-disc pl-6">
            <li>Attendance Management</li>
            <li>Grade Management</li>
            <li>Class Management</li>
            <li>Communication</li>
            <!-- Add more items as needed -->
          </ul>
        </div>
        <div class="bg-white p-6 shadow rounded mb-6">
          <h4 class="text-xl font-bold mb-2">Parent Module</h4>
          <ul class="list-disc pl-6">
            <li>Student Information</li>
            <li>Communication</li>
            <li>Fee Management</li>
            <!-- Add more items as needed -->
          </ul>
        </div>
        <!-- Add more modules as needed -->
      </div>
    </section>
  </main>

  <footer id="contact" class="bg-blue-600 text-white p-6 mt-12">
    <div class="container mx-auto text-center">
      <p>Contact us at: info@schoolmanagement.com</p>
      <p>&copy; 2025 School Management System. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
