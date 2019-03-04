<template>
    <header>
        <h1>Aktualności</h1>
    </header>
</template>

<script>

export default {
    
    name: 'NewsHeader'

}

</script>

<style lang="scss" scoped>

header{
    width: auto;
    height: auto;
    display: flex;
    align-items: center;
    justify-content: center;

    h1{
        font-family: 'Montserrat', sans-serif;
        font-weight: 500;
        color: #424242;
        margin-top: 100px;
        font-size: 5rem;
        letter-spacing: 2px;
        text-transform: uppercase;
    }
}

</style>
