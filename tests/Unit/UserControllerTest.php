<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;

    /**
     * Test the show() method of the UserController.
     *
     * @return void
     */
    public function testShowReturnsViewWithUsers()
    {
        // Arrange
        $users = User::factory()->count(3)->create();

        // Act
        $response = $this->get(route('admin.page'));

        // Assert
        $response->assertOk();
        $response->assertViewHas('users', $users);
    }

    /**
     * Test the store() method of the UserController.
     *
     * @return void
     */
    public function testStoreCreatesNewUser()
    {
        // Arrange
        $userData = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
        ];

        // Act
        $response = $this->post(route('users.store'), $userData);

        // Assert
        $response->assertRedirect(route('admin.page'));
        $response->assertSessionHas('success', 'User added successfully!');
        $this->assertDatabaseHas('users', [
            'name' => $userData['name'],
            'email' => $userData['email'],
        ]);
    }

    /**
     * Test the deleteSelected() method of the UserController.
     *
     * @return void
     */
    public function testDeleteSelectedDeletesUsers()
    {
        // Arrange
        $users = User::factory()->count(3)->create();
        $selectedUserIds = $users->pluck('id')->toArray();

        // Act
        $response = $this->delete(route('users.deleteSelected'), [
            'selectedUsers' => $selectedUserIds,
        ]);

        // Assert
        $response->assertRedirect(route('admin.page'));
        $response->assertSessionHas('success', 'Selected users deleted successfully!');
        $this->assertDatabaseMissing('users', [
            'id' => $selectedUserIds,
        ]);
    }

    /**
     * Test the deleteSelected() method of the UserController when no users are selected.
     *
     * @return void
     */
    public function testDeleteSelectedWithNoUsersSelected()
    {
        // Act
        $response = $this->delete(route('users.deleteSelected'), [
            'selectedUsers' => [],
        ]);

        // Assert
        $response->assertRedirect(route('admin.page'));
        $response->assertSessionHas('error', 'No users selected for deletion!');
    }

    /**
 * Test the update() method of the UserController.
 *
 * @return void
 */
public function testUpdateUpdatesUserInformation()
{
    // Arrange
    $user = User::factory()->create();
    $updatedUserData = [
        'user_id' => $user->id,
        'name' => 'Updated User',
        'email' => 'updated@example.com',
        'password' => 'newpassword',
    ];

    // Act
    $response = $this->put(route('users.update'), $updatedUserData);

    // Assert
    $response->assertRedirect(url('/'));
    $response->assertSessionHas('success', 'User information updated successfully!');
    $this->assertDatabaseHas('users', [
        'id' => $user->id,
        'name' => $updatedUserData['name'],
        'email' => $updatedUserData['email'],
    ]);
}


    /**
     * Test the update() method of the UserController when the user does not exist.
     *
     * @return void
     */
    public function testUpdateWithInvalidUserId()
    {
        // Arrange
        $invalidUserId = 999;
        $updatedUserData = [
            'user_id' => $invalidUserId,
            'name' => 'Updated User',
            'email' => 'updated@example.com',
            'password' => 'newpassword',
        ];

        // Act
        $response = $this->put(route('users.update'), $updatedUserData);

        // Assert
        $response->assertRedirect();
        $response->assertSessionHas('error', 'User not found! Please enter a valid user ID.');
    }
}