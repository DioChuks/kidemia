@include('partials.header')

<body class="bg-brand-white">
  <x-preloader />
  <div id="app" class="hidden">
    <div class="h-max-screen">
      <header class="h-10p flex justify-between items-center bg-secondary header">
        <div class="logo">
          <a href="/" class="w-inherit h-inherit">
            <img src="{{ asset('images/KIDEMIA LOGO pro 2.png') }}" alt="Kidemia" class="w-inherit h-inherit" />
          </a>
        </div>
        {{-- medium to large screen --}}
        <nav class="flex items-center nav sm-d-none">
          <ul class="flex items-center">
            <li class="nav-item"><a href="#"><x-bell-icon /></a></li>
            <li class="text-white nav-item">Admin</li>
        </nav>
        {{-- small screen --}}
        <nav class="relative hidden md-d-none z-10" id="mobile-menu">
          <ul
            class="absolute top-2 right-2 left-2 w-20 h-30 border flex flex-col justify-around items-center bg-brand-white rounded-sm">
            <a href="#" class="flex items-center gap-1 text-dark"><x-bell-icon /> Notifications</a>
            <li class="text-white nav-item">Admin</li>
          </ul>
        </nav>
        <x-menu-icon />
      </header>
      <div class="w-full h-90p flex justify-between gap-5">
        <div class="w-15p h-full flex flex-col gap-10 items-start bg-white text-16 text-secondary p-5">
          <div class="flex items-center gap-5 text-secondary mt-5">
            <x-grid-icon /> <span>Dashboard</span>
          </div>
          <a href="{{ route('admin.report') }}"
            class="w-full flex items-center gap-5 text-secondary border-bottom-3 border-secondary">
            <x-report-line-icon /> <span class="font-lg">Report</span>
          </a>
          <a href="{{ route('admin.subjects') }}" class="w-full flex justify-between items-center gap-5 text-dark">
            <h3>Subjects </h3><span>(12)</span>
          </a>
        </div>
        <div class="w-85p h-full flex flex-col gap-5 items-center p-10 ml-5 mr-5 overflow-auto">
          <div class="w-full h-full flex-flex-col justify-evenly items-center gap-10">
            <a href="{{ route('admin.subjects') }}"
              class="w-2 h-2 flex items-center justify-center rounded-full text-dark border cursor-pointer">
              <x-left-arrow-icon />
            </a>
            <br>
            <div class="w-full flex flex-col justify-between items-start gap-5 flex-wrap">
              <div class="w-80p flex flex-col gap-5 relative bg-white rounded-xs p-5">
                <div class="w-full h-4 flex items-center justify-between">
                  <h4>Question 1.</h4>
                  <select name="topic" id="topic"
                    class="w-30p h-4 border border-light-grey rounded-xs cursor-pointer">
                    <option selected>Enter Topic</option>
                    <option value="1">topic1</option>
                    <option value="2">topic2</option>
                    <option value="3">topic3</option>
                    <option value="4">topic4</option>
                  </select>
                </div>
                <div class="w-full h-4 flex items-center justify-between">
                  <input type="text" name="question" id="question"
                    class="w-70p h-4 pl-1 border border-light-grey rounded-xs"
                    placeholder="What is Newton’s first law of motion?" />
                  <select name="topic" id="topic"
                    class="w-30p h-4 border border-light-grey rounded-xs cursor-pointer">
                    <option selected>Multiple choice answer</option>
                    <option value="1">option1</option>
                    <option value="2">option2</option>
                    <option value="3">option3</option>
                    <option value="4">option4</option>
                  </select>
                </div>
                <div class="w-full flex flex-col gap-10 p-5 option-container">
                  <div class="w-full flex items-center justify-between gap-5 option-box">
                    <div class="w-85p flex items-center gap-5">
                      <x-helper.union-icon />
                      <input type="radio" name="answer" id="correctAnswer" />
                      <input type="text" name="option1" id="option1"
                        class="w-80p h-4 pl-1 bg-color border border-light-grey rounded-xs"
                        placeholder="Type your option" style="--bg:#F4F9FC" />
                    </div>
                  </div>
                </div>
                <div class="w-full p-1 justify-end pr-1 items-center gap-10 inline-flex">
                  <div
                    class="p-10 bg-opaque-blue text-blue rounded-xs justify-start items-center gap-2 flex cursor-pointer"
                    id="addOptionBtn">
                    <x-helper.add-icon />
                    <span>Add option</span>
                  </div>
                  <div class="justify-start items-center gap-2 flex text-light-blue cursor-pointer" id="openBtn">
                    <x-helper.link-icon />
                    <span>Link to Media</span>
                  </div>
                  <div class="justify-start items-center gap-2 flex text-primary">
                      <label for="correctionVideo" class="flex items-center gap-5 cursor-pointer"><x-helper.upload-icon /> Upload Media</label>
                      <input type="file" name="correction_video" id="correctionVideo" class="hidden"/>
                  </div>
                  <div class="justify-start items-center gap-2 flex text-base-wine cursor-pointer">
                    <x-helper.trash-icon />
                    <span>Delete</span>
                  </div>
                </div>
              </div>
              <div class="w-80p flex items-center justify-end gap-10">
                <div class="flex items-center gap-5 text-primary cursor-pointer">
                    <div class="flex items-center bg-primary text-white rounded-full">
                        <x-helper.add-icon/>
                    </div>
                    <span>Add Question</span>
                </div>
                <div class="h-3 flex items-center gap-5 bg-primary text-white p-5 rounded-xs cursor-pointer">
                    <span>Save and Continue</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- link to media modal --}}
      <div class="fixed hidden z-1 left-0 top-0 w-full h-full justify-center items-center overflow-auto bg-semi-black transition-all PendingApprovalModal" id="customModal">
        <form class="relative w-half h-3-quarts flex flex-col items-start justify-around gap-10 bg-white text-dark p-10 rounded-md modal-content animate-slideDown" method="post" action="">
          @csrf
          <span class="absolute w-3 h-3 top-2 right-2 text-red text-24 cursor-pointer" id="closeModal">&times;</span>
          <h1 class="text-secondary sm-text-value" style="--textSmVal:13px;">Link to Video</h1>
          <div class="w-full flex flex-col gap-5">
            <label for="videoLink" class="font-md">Place your link:</label>
            <input type="text" class="w-full h-5 pl-1 border border-light-grey" name="video_link" id="videoLink" />
          </div>
          <div class="w-full flex flex-col gap-5">
            <label for="videoLink" class="font-lg">Preview:</label>
            <img src="{{ asset('images/ion_image.svg') }}" class="w-full h-10 border border-light-grey rounded-md" name="video_link_preview" id="videoLinkPreview" />
          </div>
          <div class="w-full flex items-center justify-center gap-10">
            <button class="w-half h-5 flex items-center justify-center gap-5 bg-white rounded-xs border border-primary rounded-xs text-primary cursor-pointer" type="button" id="closeModal">Cancel</button>
            <button class="w-half h-5 flex items-center justify-center gap-5 bg-primary text-white p-5 rounded-xs border-none cursor-pointer" type="button">Save and Continue</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    // Get the container element where you want to add the new optionBox
    const container = document.querySelector('.option-container');

    // Get the "Add option" button element
    const addOptionButton = document.getElementById('addOptionBtn');

    // Create a new optionBox element
    function createNewOptionBox() {
      const newOptionBox = document.createElement('div');
      newOptionBox.classList.add('w-full', 'flex', 'items-center', 'justify-between', 'gap-5', 'option-box');

      const divBox = document.createElement('div');
      divBox.classList.add('w-85p', 'flex', 'items-center', 'gap-5');
      divBox.innerHTML = `<x-helper.union-icon />`;

      const radioInput = document.createElement('input');
      radioInput.type = 'radio';
      radioInput.name = 'answer';
      radioInput.id = 'correctAnswer';

      divBox.appendChild(radioInput);

      const optionInput = document.createElement('input');
      optionInput.type = 'text';
      optionInput.name = `option${container.querySelectorAll('.option-box').length + 1}`;
      optionInput.id = `option${container.querySelectorAll('.option-box').length + 1}`;
      optionInput.classList.add('w-80p', 'h-4', 'pl-1', 'bg-color', 'border', 'border-light-grey', 'rounded-xs');
      optionInput.placeholder = 'Type your option';
      optionInput.style.setProperty('--bg', '#F4F9FC');
      divBox.appendChild(optionInput);
      newOptionBox.appendChild(divBox);

      const removeButton = document.createElement('div');
      removeButton.classList.add('remove-option', 'flex', 'items-center', 'gap-5', 'text-red', 'px-2', 'py-1',
        'cursor-pointer');
      removeButton.innerHTML = `<x-helper.dash-circle-icon /> <span>Remove</span>`;
      newOptionBox.appendChild(removeButton);

      return newOptionBox;
    }

    // Add event listener to the "Add option" button
    addOptionButton.addEventListener('click', () => {
      const newOptionBox = createNewOptionBox();
      container.appendChild(newOptionBox);

      const removeButtons = document.querySelectorAll('.remove-option');
      removeButtons.forEach((button) => {
        button.addEventListener('click', () => {
          const optionBox = button.parentElement;
          optionBox.remove();
        });
      });
    });
  </script>
  @vite(['resources/js/modal.js'])
</body>

</html>
