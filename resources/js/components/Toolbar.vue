<template>
  <div>
    <v-app-bar
      color="deep-purple accent-4"
      dense
      dark
    >
      <v-app-bar-nav-icon></v-app-bar-nav-icon>

      <v-toolbar-title>Fvasquez</v-toolbar-title>

      <v-spacer></v-spacer>
      <div>
         <router-link to='/forum'>
          <v-btn text>Forum</v-btn>
         </router-link>
          <v-btn text>Ask Question</v-btn>
          <v-btn text>Category</v-btn>
          <router-link to='/login'>
            <v-btn text>Login</v-btn>
          </router-link>
      </div>
    </v-app-bar>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
</style>