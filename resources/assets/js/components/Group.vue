<template>
  <div class="card card-default group">
    <div class="card-header">{{ group.name }}</div>

    <div class="card-body">
      <div class="card-text">
        <h4>Information:</h4>
        <p>{{ group.info }}</p>
      </div>

      <div class="card-text">
        <h4>Conditions:</h4>
        <p>{{ group.conditions }}</p>
      </div>

      <a
        :href="`/groups/join?id=${group.id}`"
        class="card-link"
        v-if="!hasJoin"
      >
        Join group
      </a>

      <a
        :href="`/groups/${group.id}`"
        class="card-link"
        v-else
      >
        Show more
      </a>
    </div>
  </div>
</template>

<script>
export default {
  props: ['group'],

  computed: {
    hasJoin() {
      return this.group.hasJoin || this.group.isOwner
    }
  }
}
</script>

<style>
  .group {
    margin-bottom: 15px;
  }
</style>

