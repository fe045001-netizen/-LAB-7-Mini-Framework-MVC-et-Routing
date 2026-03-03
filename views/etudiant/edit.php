<?php
/** @var array|null $e */
/** @var array $filieres */
/** @var array $errors */
?>
<?php if (!empty($e)): ?>
<h2>Éditer l’étudiant #<?= (int)$e['id'] ?></h2>

<form method="post" action="/etudiants/<?= (int)$e['id'] ?>/update">
  <label>CNE
    <input name="cne" value="<?= htmlspecialchars($e['cne'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required>
  </label>
  <?php if (!empty($errors['cne'])): ?>
    <small class="error"><?= htmlspecialchars($errors['cne'], ENT_QUOTES, 'UTF-8') ?></small>
  <?php endif; ?>

  <label>Nom
    <input name="nom" value="<?= htmlspecialchars($e['nom'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required>
  </label>
  <?php if (!empty($errors['nom'])): ?>
    <small class="error"><?= htmlspecialchars($errors['nom'], ENT_QUOTES, 'UTF-8') ?></small>
  <?php endif; ?>

  <label>Prénom
    <input name="prenom" value="<?= htmlspecialchars($e['prenom'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required>
  </label>
  <?php if (!empty($errors['prenom'])): ?>
    <small class="error"><?= htmlspecialchars($errors['prenom'], ENT_QUOTES, 'UTF-8') ?></small>
  <?php endif; ?>

  <label>Email
    <input type="email" name="email" value="<?= htmlspecialchars($e['email'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required>
  </label>
  <?php if (!empty($errors['email'])): ?>
    <small class="error"><?= htmlspecialchars($errors['email'], ENT_QUOTES, 'UTF-8') ?></small>
  <?php endif; ?>

  <label>Filière
    <select name="filiere_id" required>
      <?php foreach ($filieres as $f): ?>
        <option value="<?= (int)$f['id'] ?>" <?= ((int)($e['filiere_id'] ?? 0) === (int)$f['id']) ? 'selected' : '' ?>>
          <?= htmlspecialchars($f['code'].' — '.$f['libelle'], ENT_QUOTES, 'UTF-8') ?>
        </option>
      <?php endforeach; ?>
    </select>
  </label>
  <?php if (!empty($errors['filiere_id'])): ?>
    <small class="error"><?= htmlspecialchars($errors['filiere_id'], ENT_QUOTES, 'UTF-8') ?></small>
  <?php endif; ?>

  <button type="submit">Enregistrer</button>
  <a role="button" class="secondary" href="/etudiants/<?= (int)($e['id'] ?? 0) ?>">Annuler</a>
</form>

<?php else: ?>
<p class="error">Étudiant introuvable.</p>
<?php endif; ?>