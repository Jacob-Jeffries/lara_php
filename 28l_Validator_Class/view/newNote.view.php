<?php require 'view/partials/head.php'; ?>
<?php require 'view/partials/nav.php'; ?>
<?php require 'view/partials/banner.php'; ?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

    <!-- This is my Form:
    <form action="" method="POST" >
      <label for="body">New Note Body:<br/>
        <input type="text" id="body" name="body" placeholder="Enter New Note Text Here."/>
      </label>
      <br />
      <label for="user_id">User Id:
        <select id="user_id" name="user_id">
          <option value="1">Jacob</option>
          <option value="3">Bubba</option>
        </select>
      </label>
      <br />
      <button type="submit" class="bg-green-500 rounded p2">Submit</button>
    </form> -->

    <form action='#' method="POST">
      <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="col-span-full">
              <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Body</label>
              <div class="mt-2">
                <textarea 
                  id="body" 
                  name="body" 
                  rows="3" 
                  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Here is an idea for a note..."
                ><?= isset($_POST['body']) ? $_POST['body'] : ''  ?></textarea>
                <?php if (isset($errors['body'])) : ?>
                  <p class="text-red-500 text-xs mt-2"><?= $errors['body'] ?></p>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
      </div>

    </form>

    </div>
    <?php require 'view/partials/info.php'; ?>
  </main>

<?php require 'view/partials/footer.php'; ?>