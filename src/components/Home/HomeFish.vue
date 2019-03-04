<template>
    <div class="fish-wrapper">
        <h1 id="h1">KATECHEZA SYSTEMOWA</h1>
        <canvas id="canvas"></canvas>
    </div>
</template>

<script>
export default {
    name: 'HomeFish',

    mounted(){
        const d = document.getElementById("canvas");
        const h1 = document.getElementById("h1");
        
        setTimeout( () => {

            d.style.transform = 'translateX(0)';

        }, 100);

        setTimeout( () => {

            h1.style.transform = 'translateY(0)';
            h1.style.opacity = '1';

        }, 3500);
    },

}
</script>

<style lang="scss" scoped>

.fish-wrapper{
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;

    canvas{
        background-color: none;
        width: 100%;
        height: 700px;
        background-image: url('../../assets/1200px-Ichthus.svg.png');
        background-position: center;
        background-size: 45%;
        background-repeat: no-repeat;
        background-attachment: scroll;
        transition: transform 3s linear;
        transform: translateX(100%);
        margin-top: -100px;
        will-change: transform;
    }

    h1{
        color: #ffffff;
        font-size: 5rem;
        margin-top: 150px;
        will-change: transform;
        opacity: 0;
        transform: translateY(20px);
        transition: all .3s linear;
        font-family: "Lato", sans-serif;
        font-weight: 400;
        letter-spacing: 2px;
    }
}

</style>
