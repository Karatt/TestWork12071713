<template>
  {{ message }}
  <div class="table-responsive">
    <table class="table">
      <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Actions</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  name: "Posts",
  data() {
    return {
      message: 'Hello Vue!!'
    }
  }
}
</script>

<style scoped>

</style>