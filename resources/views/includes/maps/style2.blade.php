<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    html,
    body {
        text-align: center;
        margin: 0;
        padding: 0;


    }

    #map2 {
        margin-top: 100px;
        height: 80vh;
        width: 100vw;
        max-width: 100%;
        margin: auto;
    }

    .card {
        font-family: 'Poppins',
            sans-serif;
    }

    .card img {
        border-radius: 5px;
        max-height: 200px;
        object-fit: cover;
    }

    .card img:hover {
        transform: scale(1.1);
        transition: all 2s;
    }

    .card {
        border: none;
    }

    .btn-back {
        position: fixed;
        z-index: 999;
        right: 10px;
        top: 10px;
    }

    @media (max-width: 768px) {
        #map2 {
            margin-top: 100px;
            height: 60vh;
            max-width: 96%;
            margin: auto;
        }
    }

</style>
