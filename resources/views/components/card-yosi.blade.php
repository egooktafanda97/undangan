<link href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
<style>
    .card-group .card {
        position: relative;
        height: 250px;
        width: 100%;
        border-radius: 25px;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(30px);
        border: 2px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 0 80px rgba(0, 0, 0, 0.2);
        overflow: hidden;
    }

    .card-group .logo img,
    .card-group .chip img,
    .card-group .number,
    .card-group .name,
    .card-group .from,
    .card-group .to,
    .card-group .ring {
        position: absolute;
        /* All items inside card should have absolute position */
    }

    .card-group .logo img {
        top: 35px;
        right: 40px;
        width: 80px;
        height: auto;
        opacity: 0.8;
    }

    .card-group .chip img {
        top: 120px;
        left: 40px;
        width: 50px;
        height: auto;
        opacity: 0.8;
    }

    .card-group .number,
    .card-group .name,
    .card-group .from,
    .card-group .to {
        color: rgba(255, 255, 255, 0.8);
        font-weight: 400;
        letter-spacing: 2px;
        text-shadow: 0 0 2px rgba(0, 0, 0, 0.6);
    }

    .card-group .number {
        left: 40px;
        bottom: 65px;
        font-family: "Nunito", sans-serif;
    }

    .card-group .name {
        font-size: 0.5rem;
        left: 40px;
        bottom: 35px;
    }

    .card-group .from {
        font-size: 0.5rem;
        bottom: 35px;
        right: 110px;
    }

    .card-group .to {
        font-size: 0.5rem;
        bottom: 35px;
        right: 40px;
    }

    /* The two rings on the card background */
    .card-group .ring {
        height: 500px;
        width: 500px;
        border-radius: 50%;
        background: transparent;
        border: 50px solid rgba(255, 255, 255, 0.1);
        bottom: -250px;
        right: -250px;
        box-sizing: border-box;
    }

    .card-group .ring::after {
        content: "";
        position: absolute;
        height: 500px;
        width: 600px;
        border-radius: 50%;
        background: transparent;
        border: 30px solid rgba(255, 255, 255, 0.1);
        bottom: -80px;
        right: -110px;
        box-sizing: border-box;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.11/dist/clipboard.min.js"></script>
<div class="card-group w-full p-5">
    <div class="card">
        <div class="logo p-2">
            <img alt="Visa" class="bg-white" src="img/bsi-PNG.png">
        </div>
        <div class="chip">
            <img alt="chip" src="https://raw.githubusercontent.com/dasShounak/freeUseImages/main/chip.png">
        </div>
        <div class="number">2006199798 <span class="btn relative z-50 cursor-pointer"
                data-clipboard-text="2006199798"><i class="fa fa-copy" id="icon-coppy"></i></span>

        </div>
        <div class="name">Yosi Lestari</div>
        <div class="ring"></div>
    </div>
</div>
<script>
    var clipboard = new ClipboardJS('.btn');

    clipboard.on('success', function(e) {

        e.clearSelection();
    });

    clipboard.on('error', function(e) {
        //    dom icon-coppy ke paste

    });
</script>
