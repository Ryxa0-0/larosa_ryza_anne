<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-pink-100 via-blue-100 to-pink-200 p-6">

<div class="max-w-lg w-full mx-auto bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg p-8">
    <h1 class="text-3xl font-bold mb-6 text-pink-500">Edit Student</h1>

    <form action="<?= site_url('students/edit/'.segment(4)) ?>" method="POST" class="space-y-5">
        <div>
            <label class="block font-semibold text-blue-500">Last Name</label>
            <input type="text" name="last_name" 
                   value="<?= isset($_POST['last_name']) ? html_escape($_POST['last_name']) : html_escape($student['last_name']) ?>" 
                   class="w-full border border-blue-200 focus:border-pink-300 focus:ring focus:ring-pink-100 px-3 py-2 rounded-lg bg-pink-50/30" required>
        </div>

        <div>
            <label class="block font-semibold text-blue-500">First Name</label>
            <input type="text" name="first_name" 
                   value="<?= isset($_POST['first_name']) ? html_escape($_POST['first_name']) : html_escape($student['first_name']) ?>" 
                   class="w-full border border-blue-200 focus:border-pink-300 focus:ring focus:ring-pink-100 px-3 py-2 rounded-lg bg-pink-50/30" required>
        </div>

        <div>
            <label class="block font-semibold text-blue-500">Email</label>
            <input type="email" name="email" 
                   value="<?= isset($_POST['email']) ? html_escape($_POST['email']) : html_escape($student['email']) ?>" 
                   class="w-full border border-blue-200 focus:border-pink-300 focus:ring focus:ring-pink-100 px-3 py-2 rounded-lg bg-pink-50/30" required>
        </div>

        <div class="flex justify-between">
            <a href="<?= site_url('students/index') ?>" class="bg-pink-300 hover:bg-pink-400 text-white px-5 py-2 rounded-lg shadow">⬅ Back</a>
            <button type="submit" class="bg-blue-300 hover:bg-blue-400 text-white px-5 py-2 rounded-lg shadow">💾 Update</button>
        </div>
    </form>
</div>

</body>
</html>
