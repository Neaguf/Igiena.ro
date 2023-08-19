<div class="video-section">
    <div class="video">
        <div class="play-button">
            <i id="openDialogBtn" class="fas fa-play"></i>
        </div>
        <div class="video-text">
            Videoclipul Nostru
        </div>
    </div>

</div>
<div class="dialog-overlay" id="dialogOverlay">
    <div class="dialog">
        <iframe width="500" height="250" src="https://www.youtube.com/embed/tgbNymZ7vqY">
        </iframe>

        <!-- <button id="closeBtn">Close</button> -->
    </div>
</div>
<script>
    const openDialogBtn = document.getElementById('openDialogBtn');
    const dialogOverlay = document.getElementById('dialogOverlay');
    const closeBtn = document.getElementById('closeBtn');

    openDialogBtn.addEventListener('click', openDialog);

    dialogOverlay.addEventListener('click', closeDialog);

    function openDialog() {
        dialogOverlay.style.display = 'flex';
    }

    function closeDialog() {
        dialogOverlay.style.display = 'none';
    }
</script>