<template>
    <nav>
        <ul>
            <li v-for="link in links" v-bind:key="link.link_key">
                <router-link v-bind:to="link.link_to">
                    <div class="top" v-bind:ref="link.link_ref" v-on:click="changeTitle(link.title)">
                        <p>{{ link.link_name }}</p>
                    </div>
                    <div class="bottom" v-bind:ref="link.link_ref" v-on:click="changeTitle(link.title)">
                        <i v-bind:class="link.link_icon_class"></i>
                    </div>
                </router-link>
            </li>
        </ul>
    </nav>
</template>

<script>
export default {
    name: 'Navigation',
    data(){

        return{

            links: [
                {
                    link_name: 'HOME',
                    link_to: '/',
                    link_icon_class: 'fas fa-home',
                    link_key: 1,
                    link_ref: 'one',
                    title: 'Home'
                },
                {
                    link_name: 'AKTUALNOŚCI',
                    link_to: '/Aktualności',
                    link_icon_class: 'fas fa-newspaper',
                    link_key: 2,
                    link_ref: 'two',
                    title: 'Aktualności'
                },
                {
                    link_name: 'CZYM JEST KATECHEZA SYSTEMOWA?',
                    link_to: '/Katecheza',
                    link_icon_class: 'fas fa-book-open',
                    link_key: 3,
                    link_ref: 'three',
                    title: 'Czym jest katecheza systemowa'
                },
                {
                    link_name: 'GALERIA',
                    link_to: '/Galeria',
                    link_icon_class: 'fas fa-images',
                    link_key: 4,
                    link_ref: 'four',
                    title: 'Galeria'
                },
                {
                    link_name: 'TERAPIA DUCHOWA',
                    link_to: '/Terapia',
                    link_icon_class: 'fas fa-couch',
                    link_key: 5,
                    link_ref: 'six',
                    title: 'Terapia duchowa'
                },
                {
                    link_name: 'SZKOLENIA I KURSY',
                    link_to: '/Szkolenia',
                    link_icon_class: 'fas fa-school',
                    link_key: 6,
                    link_ref: 'five',
                    title: 'Szkolenia i kursy'
                },
                {
                    link_name: 'KONTAKT',
                    link_to: '/Kontakt',
                    link_icon_class: 'fas fa-envelope',
                    link_key: 7,
                    link_ref: 'seven',
                    title: 'Kontakt'
                },
            ],

        }

    },

    methods:{
        changeTitle(title){
            document.title = `Katecheza Systemowa | ${ title }`;
        }
    },
}
</script>

<style lang="scss" scoped>

@media all and (min-width: 1200px) and (max-width: 1399px){
nav{
    width: 100%;
    height: 100px;
    background-color: #6d4c41;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;

    ul{
        width: 1200px;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: space-around;
        padding: 0;
        margin: 0;
        list-style-type: none;
        box-sizing: border-box;
        padding: 0 10px;

        li{
            width: auto;
            height: 60px;
            position: relative;
            z-index: 1;
            cursor: pointer;
            overflow: hidden;
            margin-left: 10px;

            .top{
                width: auto;
                height: 60px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-family: "Montserrat", sans-serif;
                font-weight: 400;
                font-size: 1rem;
                position: relative;
                z-index: 1;
                color: #ffffff;
                transition: transform .2s ease-in-out;
            }

            .bottom{
                width: auto;
                height: 60px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-family: "Montserrat", sans-serif;
                font-weight: 400;
                font-size: 2rem;
                position: relative;
                z-index: 1;
                color: #ffffff;
                transition: transform .2s ease-in-out;
            }
        }

        li:first-child{
            margin-left: 0;
        }

        li:hover .top{
            transform: translateY(-60px);
        }

        li:hover .bottom{
            transform: translateY(-60px);
        }

        a{
            text-decoration: none;
        }

    }
}
}

@media all and (min-width: 1400px) and (max-width: 1599px){
nav{
    width: 100%;
    height: 100px;
    background-color: #755a50;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;

    ul{
        width: 1400px;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: space-around;
        padding: 0;
        margin: 0;
        list-style-type: none;
        box-sizing: border-box;
        padding: 0 10px;

        li{
            width: auto;
            height: 60px;
            position: relative;
            z-index: 1;
            cursor: pointer;
            overflow: hidden;
            margin-left: 15px;

            .top{
                width: auto;
                height: 60px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-family: "Montserrat", sans-serif;
                font-weight: 400;
                font-size: 1.1rem;
                position: relative;
                z-index: 1;
                color: #ffffff;
                transition: transform .2s ease-in-out;
            }

            .bottom{
                width: auto;
                height: 60px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-family: "Montserrat", sans-serif;
                font-weight: 400;
                font-size: 2.1rem;
                position: relative;
                z-index: 1;
                color: #ffffff;
                transition: transform .2s ease-in-out;
            }
        }

        li:first-child{
            margin-left: 0;
        }

        li:hover .top{
            transform: translateY(-60px);
        }

        li:hover .bottom{
            transform: translateY(-60px);
        }

        a{
            text-decoration: none;
        }

    }
}
}

@media all and (min-width: 1600px){
nav{
    width: 100%;
    height: 100px;
    background-color: #755a50;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;

    ul{
        width: 1600px;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: space-around;
        padding: 0;
        margin: 0;
        list-style-type: none;
        box-sizing: border-box;
        padding: 0 10px;

        li{
            width: auto;
            height: 60px;
            position: relative;
            z-index: 1;
            cursor: pointer;
            overflow: hidden;
            margin-left: 20px;

            .top{
                width: auto;
                height: 60px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-family: "Montserrat", sans-serif;
                font-weight: 400;
                font-size: 1.2rem;
                position: relative;
                z-index: 1;
                color: #ffffff;
                transition: transform .2s ease-in-out;
            }

            .bottom{
                width: auto;
                height: 60px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-family: "Montserrat", sans-serif;
                font-weight: 400;
                font-size: 2.2rem;
                position: relative;
                z-index: 1;
                color: #ffffff;
                transition: transform .2s ease-in-out;
            }
        }

        li:first-child{
            margin-left: 0;
        }

        li:hover .top{
            transform: translateY(-60px);
        }

        li:hover .bottom{
            transform: translateY(-60px);
        }

        a{
            text-decoration: none;
        }

    }
}
}

</style>
