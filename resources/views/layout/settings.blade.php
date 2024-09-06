<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body class="bg-gradient-to-r from-pink-200 to-purple-300 min-h-screen flex justify-center items-center">
    <main class="my-0 mx-auto min-h-full max-w-screen-sm">   
        <div class="bg-white shadow-lg rounded-lg max-w-4xl w-full">
            <div class="flex">
                <!-- Sidebar -->
                <div class="w-1/4 bg-blue-100 p-5 rounded-l-lg">
                    <div class="text-center mb-6">
                        <img src="https://via.placeholder.com/100" alt="Profile Image" class="rounded-full mx-auto mb-2">
                        <h3 class="text-xl font-semibold">Vũ Doãn Dũng</h3>
                    </div>
                    <ul class="space-y-4">
                        <li><a href="#" id="link-account" onclick="showSection('account', 'link-account')" class="sidebar-link text-blue-600 font-medium transition-colors duration-300">Account</a></li>
                        <li><a href="#" id="link-password" onclick="showSection('password', 'link-password')" class="sidebar-link text-gray-600 font-medium transition-colors duration-300">Password</a></li>
                        <li><a href="#" id="link-security" onclick="showSection('security', 'link-security')" class="sidebar-link text-gray-600 font-medium transition-colors duration-300">Security</a></li>
                        <li><a href="#" id="link-notification" onclick="showSection('notification', 'link-notification')" class="sidebar-link text-gray-600 font-medium transition-colors duration-300">Notification</a></li>
                    </ul>
                </div>

                <!-- Main Content -->
                <div class="w-3/4 p-8">
                    <!-- Account Settings Section -->
                    <div id="account" class="section">
                        <h2 class="text-2xl font-semibold mb-6">Account Settings</h2>
                        <form action="#" method="POST" class="space-y-6">
                            <div class="grid grid-cols-2 gap-6">
                                <!-- First Name -->
                                <div>
                                    <label for="first-name" class="block text-sm font-medium text-gray-700">First Name</label>
                                    <input type="text" id="first-name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" value="Vũ Doãn">
                                </div>
                                <!-- Last Name -->
                                <div>
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">Last Name</label>
                                    <input type="text" id="last-name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" value="Dũng">
                                </div>
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" id="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" value="vudoangit92@gmail.com">
                            </div>

                            <!-- Phone Number -->
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700">Phone number</label>
                                <input type="text" id="phone" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" value="+91 9876543215">
                            </div>

                            <!-- Buttons -->
                            <div class="flex justify-end space-x-4">
                                <button type="button" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">Cancel</button>
                                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Update</button>
                            </div>
                        </form>
                    </div>

                    <!-- Password Section -->
                    <div id="password" class="section hidden">
                        <h2 class="text-2xl font-semibold mb-6">Change Password</h2>
                        <form action="#" method="POST" class="space-y-6">
                            <!-- Current Password -->
                            <div>
                                <label for="current-password" class="block text-sm font-medium text-gray-700">Current Password</label>
                                <input type="password" id="current-password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            </div>

                            <!-- New Password -->
                            <div>
                                <label for="new-password" class="block text-sm font-medium text-gray-700">New Password</label>
                                <input type="password" id="new-password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            </div>

                            <!-- Confirm New Password -->
                            <div>
                                <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm New Password</label>
                                <input type="password" id="confirm-password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            </div>

                            <!-- Buttons -->
                            <div class="flex justify-end space-x-4">
                                <button type="button" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">Cancel</button>
                                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Update</button>
                            </div>
                        </form>
                    </div>

                    <!-- Security Section -->
                    <div id="security" class="section hidden">
                        <h2 class="text-2xl font-semibold mb-6">Security Settings</h2>
                        <form action="#" method="POST" class="space-y-6">
                            <!-- Two-Factor Authentication -->
                            <div class="flex items-center">
                                <input type="checkbox" id="2fa" class="mr-2" checked>
                                <label for="2fa" class="block text-sm font-medium text-gray-700">Enable Two-Factor Authentication</label>
                            </div>

                            <!-- Backup Email -->
                            <div>
                                <label for="backup-email" class="block text-sm font-medium text-gray-700">Backup Email</label>
                                <input type="email" id="backup-email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Enter backup email">
                            </div>

                            <!-- Buttons -->
                            <div class="flex justify-end space-x-4">
                                <button type="button" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">Cancel</button>
                                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Update</button>
                            </div>
                        </form>
                    </div>

                    <!-- Notification Section -->
                    <div id="notification" class="section hidden">
                        <h2 class="text-2xl font-semibold mb-6">Notification Settings</h2>
                        <form action="#" method="POST" class="space-y-6">
                            <!-- Email Notifications -->
                            <div class="flex items-center">
                                <input type="checkbox" id="email-notifications" class="mr-2" checked>
                                <label for="email-notifications" class="block text-sm font-medium text-gray-700">Email Notifications</label>
                            </div>

                            <!-- Push Notifications -->
                            <div class="flex items-center">
                                <input type="checkbox" id="push-notifications" class="mr-2">
                                <label for="push-notifications" class="block text-sm font-medium text-gray-700">Push Notifications</label>
                            </div>

                            <!-- SMS Notifications -->
                            <div class="flex items-center">
                                <input type="checkbox" id="sms-notifications" class="mr-2">
                                <label for="sms-notifications" class="block text-sm font-medium text-gray-700">SMS Notifications</label>
                            </div>

                            <!-- Buttons -->
                            <div class="flex justify-end space-x-4">
                                <button type="button" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">Cancel</button>
                                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        function showSection(sectionId, linkId) {
            // Hide all sections
            document.querySelectorAll('.section').forEach(section => {
                section.classList.add('hidden');
            });

            // Show the selected section
            document.getElementById(sectionId).classList.remove('hidden');

            // Remove active class from all links
            document.querySelectorAll('.sidebar-link').forEach(link => {
                link.classList.remove('text-blue-600');
                link.classList.add('text-gray-600');
            });

            // Add active class to the clicked link
            document.getElementById(linkId).classList.add('text-blue-600');
            document.getElementById(linkId).classList.remove('text-gray-600');
        }
    </script>
</body>
</html>
        