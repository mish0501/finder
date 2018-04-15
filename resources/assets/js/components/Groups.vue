<template>
  <div>
    <group
      v-if="isGroups"
      v-for="group in groups"
      :group="group"
      :key="group.id"
    />

    <template v-else class="card card-default">
      <div class="card-header">Not found</div>

      <div class="card-body">
        <div class="card-text">
            Sorry, but we could not find group with that name.
        </div>
      </div>
    </template>
  </div>
</template>

<script>
export default {
  props: ["groups"],

  computed: {
    isGroups() {
        return this.groups !== undefined && this.groups.length > 0
    }
  }
};
</script>
