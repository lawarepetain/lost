<div class="mb-3">
    <label>Titre</label>
    <input type="text" name="titre" class="form-control" value="{{ old('titre', $objet->titre ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Description</label>
    <textarea name="description" class="form-control" required>{{ old('description', $objet->description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Lieu</label>
    <input type="text" name="lieu" class="form-control" value="{{ old('lieu', $objet->lieu ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Date</label>
    <input type="date" name="date" class="form-control" value="{{ old('date', isset($objet) ? $objet->date->format('Y-m-d') : '') }}" required>
</div>

<div class="mb-3">
    <label>Image</label>
    <input type="file" name="image" class="form-control">
    @if(isset($objet) && $objet->image)
        <img src="{{ asset('storage/' . $objet->image) }}" alt="Image" class="img-thumbnail mt-2" width="200">
    @endif
</div>

<div class="mb-3">
    <label>Latitude</label>
    <input type="text" name="latitude" class="form-control" value="{{ old('latitude', $objet->latitude ?? '') }}">
</div>

<div class="mb-3">
    <label>Longitude</label>
    <input type="text" name="longitude" class="form-control" value="{{ old('longitude', $objet->longitude ?? '') }}">
</div>
