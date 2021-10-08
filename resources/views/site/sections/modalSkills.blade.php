<!-- component -->
<style>
    :root {
        --shadow:0 25px 50px -12px rgba(0, 0, 0, 0.25);
        --ring-offset-shadow:0 0 #0000;
        --ring-shadow:0 0 #0000;
    }

    .card_open {
        animation-duration: 2s;
        animation-name: card_open;
    }

    @keyframes card_open {
        from {
            height: 1%;
            box-shadow: var(--shadow);
        }

        to {
            height: 100%;
            box-shadow: var(--ring-offset-shadow,0 0 #0000),var(--ring-shadow,0 0 #0000),var(--shadow);
        }
    }
</style>


    <div id="card_panel" class="main-modal fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center hidden">
        <div class="modal-container bg-white w-4/12 md:max-w-11/12 mx-auto rounded-xl z-50 overflow-y-auto">
            <div class="modal-content py-4 text-left px-6">
                <div class="flex justify-between items-center pb-3">
                    <p class="text-2xl font-bold text-gray-500">Skills</p>
                    <div id="card_close" class="modal-close cursor-pointer z-50">
                        <svg class="fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                        </svg>
                    </div>
                </div>
                <div class="my-5 mr-5 ml-5 flex justify-center">
                    <p>Body</p>
                </div>
                <div class="flex justify-end pt-2 space-x-14">
                    <p>Footer</p>
                </div>
            </div>
        </div>
    </div>

<script>
    const card_open = document.getElementById('card_open')
    const card_close = document.getElementById('card_close')
    const card_panel = document.getElementById('card_panel')

    function modalState() {
        if(card_panel.classList.contains('hidden')) {
            // Show modal
            card_panel.classList.remove('hidden')
            card_panel.classList.add('block')

    
            // Start animation open
            card_panel.classList.add('card_open')
        } else {
            // Delete modal
            card_panel.classList.add('hidden')
            card_panel.classList.remove('block')


            // Remove animation open
            card_panel.classList.remove('card_open')
        }
    }

    card_open.addEventListener('click', modalState)
    card_close.addEventListener('click', modalState)
</script>