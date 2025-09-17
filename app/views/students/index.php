<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-pink-100 via-blue-100 to-pink-200 p-8">

    <div class="max-w-4xl mx-auto bg-white/80 backdrop-blur-sm shadow-lg rounded-2xl p-8">
        <h1 class="text-3xl font-bold mb-6 text-pink-500">Students List</h1>

        <div class="flex gap-3">
            <a href="/students/create" 
               class="bg-blue-300 hover:bg-blue-400 text-white px-5 py-2 rounded-lg shadow">
                + Add Student
            </a>

            <a href="/students/delete_all"
               onclick="return confirm('Are you sure you want to delete ALL records?')"
               class="bg-pink-300 hover:bg-pink-400 text-white px-5 py-2 rounded-lg shadow">
                Delete All
            </a>
        </div>

        <!-- Students Table -->
        <div class="overflow-x-auto mt-6">
            <table class="min-w-full bg-white/70 border border-blue-200 rounded-lg">
                <thead>
                    <tr class="bg-gradient-to-r from-pink-200 to-blue-200 text-left">
                        <th class="py-2 px-4 border-b border-blue-200">ID</th>
                        <th class="py-2 px-4 border-b border-blue-200">Last Name</th>
                        <th class="py-2 px-4 border-b border-blue-200">First Name</th>
                        <th class="py-2 px-4 border-b border-blue-200">Email</th>
                        <th class="py-2 px-4 border-b border-blue-200 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($students)): ?>
                        <?php foreach ($students as $student): ?>
                            <tr class="hover:bg-pink-50/50">
                                <td class="py-2 px-4 border-b border-blue-200"><?= $student['id'] ?></td>
                                <td class="py-2 px-4 border-b border-blue-200"><?= $student['last_name'] ?></td>
                                <td class="py-2 px-4 border-b border-blue-200"><?= $student['first_name'] ?></td>
                                <td class="py-2 px-4 border-b border-blue-200"><?= $student['email'] ?></td>
                                <td class="py-2 px-4 border-b border-blue-200 text-center">
                                    <a href="/students/edit/<?= $student['id'] ?>" 
                                       class="bg-blue-300 hover:bg-blue-400 text-white px-3 py-1 rounded-lg shadow">
                                        Edit
                                    </a>
                                    <a href="/students/delete/<?= $student['id'] ?>" 
                                       onclick="return confirm('Are you sure you want to delete this student?')"
                                       class="bg-pink-300 hover:bg-pink-400 text-white px-3 py-1 rounded-lg shadow ml-1">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="text-center py-4 text-blue-500">No students found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
