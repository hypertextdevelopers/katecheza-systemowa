<template>
    <div class="news-wrapper page">
        <main>
            <app-news-header></app-news-header>
            <app-news-post v-bind:posts="posts" v-bind:empty="empty"></app-news-post>
        </main>
    </div>
</template>

<script>

import NewsHeader from '../components/News/Header';
import NewsPost from '../components/News/Posts';
import axios from 'axios';

export default {

    components: {
        'app-news-header': NewsHeader,
        'app-news-post': NewsPost,
    },

    data(){

        return{

            posts: [],
            empty: true

        }

    },

    created(){

        axios.get('http://localhost/portfolio/ks-server/posts_show.php')
                .then( (res) => {

                    this.posts = res.data;

                });

    },

    updated(){

        if(this.posts.length > 0){

            this.empty = false;

        }

    }

}

</script>

<style lang="scss" scoped>

.news-wrapper{
    width: 100%;
    height: calc(100vh - 100px);
    background-color: #efebe9;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    overflow-y: auto;
    overflow-x: hidden;

    main{
        width: 1200px;
        height: auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
    }
}

</style>
