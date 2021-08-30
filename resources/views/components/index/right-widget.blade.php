<div class="lg:w-80 w-full">
    <h3 class="text-xl font-semibold mb-2"> Birthdays </h3>
    <a href="#" class="uk-link-reset mb-2">
        <div class="flex py-2 pl-2 mb-2 rounded-md hover:bg-gray-200">
            <img src="assets/images/icons/gift-icon.png" class="w-9 h-9 mr-3" alt="">
            <p class="line-clamp-2"> <strong> Jessica Erica </strong> and <strong> two others </strong>
                have a birthdays to day .
            </p>
        </div>
    </a>

    <h3 class="text-xl font-semibold"> Other Users </h3>
    <div class="" uk-sticky="offset:80">
      <div class="widget card p-5 border-t">
          <div class="flex items-center justify-between mb-2">
              <div>
                  <h4 class="text-lg font-semibold"> all users TODO Related friends</h4>
              </div>
              <a href="#" class="text-blue-600 "> See all</a>
          </div>
          <div>
              @foreach (\App\Models\User::where('id','!=', auth()->id())->inRandomOrder()->take(8)->get() as $user)
                  <x-index.friend :user="$user" />
              @endforeach
          </div>
      </div>
    </div>
</div>