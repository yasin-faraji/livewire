<div>
    <ul>
        <li>Home</li>
        <li>About</li>
    </ul>

    <script>
        document.addEventListener('livewire:load' , () => {

                Livewire.on('forTest' , () => {
                    console.log('good');
                    {{ Log::info('bad'); }}
                });

        });
    </script>
</div>
