<template>
  <div class="app-wrapper">
    <app-navigation></app-navigation>
      <transition name="router-anim">
        <keep-alive>
          <router-view></router-view>
        </keep-alive>
      </transition>
  </div>
</template>

<script>

import Navigation from './components/Root/Navigation';

export default {

  components:{
    'app-navigation': Navigation
  }

}
</script>

<style lang="scss">

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body{
  background-color: #8D6E63;
  overflow-x: hidden;
}

.app-wrapper{
  width: 100%;
  height: auto;
  display: flex;
  align-items: center;
  flex-direction: column;
}

.page{
  width: inherit;
  position: fixed;
  top: 100px;
}

.router-anim-enter-active{
  animation: coming .5s;
  animation-delay: .5s;
  opacity: 0;
}

.router-anim-leave-active{
  animation: going 1s;
}

@keyframes going{
  from{
    transform: translateX(0);
  }

  to{
    transform: translateX(-50px);
    opacity: 0;
  }
}

@keyframes coming{
  from{
    transform: translateX(-50px);
    opacity: 0;
  }

  to{
    transform: translateX(0px);
    opacity: 1;
  }
}

</style>
