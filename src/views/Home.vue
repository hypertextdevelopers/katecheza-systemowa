<template>
    <div class="home-wrapper page">
        <app-home-fish></app-home-fish>
    </div>
</template>

<script>

import HomeFish from '../components/Home/HomeFish';

export default {
    components:{
        'app-home-fish': HomeFish,
    },
}

</script>

<style lang="scss" scoped>

.home-wrapper{
    width: 100%;
    height: calc(100vh - 100px);
    display: flex;
    align-items: center;
    justify-content: center;
}

</style>
