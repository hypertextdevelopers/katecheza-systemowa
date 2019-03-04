<template>
    <div class="post-wrapper">
        <ul>
            <li v-if="empty" class="empty">
                <i class="fas fa-frown"></i>
            </li>
            <li v-for="(post, index) in posts" v-bind:key="index" v-else>
                <div class="left">
                    <header>
                        <h1>{{ post.title }}</h1>
                        <span></span>
                    </header>
                    <div class="author">
                        <div class="profile-image"></div>
                        <div class="name">
                            <p>
                                Waldemar <span class="lastname">Wczasek</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="content">
                        <p>
                            {{ post.content }}
                        </p>
                    </div>
                    <div class="info">
                        <p>
                            {{ post.date }}
                        </p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>

export default {
    
    name: 'NewsPosts',

    props: {

        posts:{

            type: Array,
            required: true

        },

        empty:{

            type: Boolean,
            required: true

        }

    }

}

</script>

<style lang="scss" scoped>

.post-wrapper{
    width: 900px;
    height: auto;
    margin-top:100px;
    margin-bottom: 100px;

    ul{
        width: 100%;
        height: auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        padding: 0;
        margin: 0;
        list-style-type: none;

        .empty{
            width: 500px;
            height: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px 0;

            i{
                color: #8D6E63;
                font-size: 8rem;
            }
        }

        li{
            width: 100%;
            height: auto;
            margin-bottom: 100px;
            display: flex;
            flex-direction: row;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.3);
            transition: transform .3s ease-in-out;

            .left{
                width: 400px;
                height: 100%;
                background-color: #8D6E63;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-between;
                box-sizing: border-box;
                padding: 30px 30px;

                header{
                    width: 100%;
                    height: auto;
                    display: flex;
                    align-items: flex-start;
                    justify-content: flex-start;
                    flex-direction: column;

                    h1{
                        font-family: 'Open Sans', sans-serif;
                        font-weight: 600;
                        color: #efebe9;
                        font-size: 2.2rem;
                    }

                    span{
                        width: 100px;
                        height: 8px;
                        margin-top: 10px;
                        background-color: #424242;
                        border-radius: 20px;
                    }
                }

                .author{
                    width: 100%;
                    height: 80px;
                    display: flex;
                    align-items: center;
                    justify-content: flex-start;
                    padding-top: 100px;
                    box-sizing: content-box;

                    .profile-image{
                        width: 80px;
                        height: 100%;
                        background-image: url('../../assets/10982036_643561425771245_5033435076398341962_n.jpg');
                        background-position: 0px 0px;
                        background-attachment: scroll;
                        background-repeat: no-repeat;
                        background-size: contain;
                        border-radius: 100%;
                    }

                    .name{
                        padding-left: 20px;
                        
                        p{
                             font-family: 'Open sans', sans-serif;
                            font-weight: 400;
                            color: #efebe9;
                            font-size: 1.2rem;
                        }

                        .lastname{
                            font-weight: 600;
                            color: #ffffff;
                            opacity: 1;
                        }
                    }
                }
            }

            .right{
                width: 500px;
                height: 100%;
                background-color: #efebe9;
                box-sizing: border-box;
                padding: 30px 30px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-between;

                .content{
                    width: 100%;
                    height: auto;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    box-sizing: border-box;
                    padding-bottom: 30px;

                    p{
                        font-size: 1.1rem;
                        font-family: 'Montserrat', sans-serif;
                        font-weight: 400;
                        color: #424242;
                        line-height: 30px;
                    }
                }

                .info{
                    width: 100%;
                    height: auto;
                    display: flex;
                    align-items: center;
                    justify-content: flex-start;
                    box-sizing: border-box;
                    padding-top: 30px;
                    border-top: 1px solid lightgray;

                    p{
                        font-size: 1.2rem;
                        font-family: 'Montserrat', sans-serif;
                        font-weight: 500;
                        color: #424242;
                    }
                }
            }
        }

        li:last-child{
            margin-bottom: 0;
        }
    }
}

</style>
