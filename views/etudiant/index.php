<?php
/** @var array $etudiants
    @var int $page
    @var int $size
    @var int $total
    @var int $totalPages
*/
?>

<h2>Étudiants</h2>
<p>Total: <?php echo (int)$total; ?> — Page <?php echo (int)$page; ?>/<?php echo (int)$totalPages; ?></p>

<a role="button" href="/etudiants/create">Nouveau</a>

<?php if (!$etudiants): ?>
    <p>Aucun étudiant.</p>
<?php else: ?>
    <table>
        <thead>
            <tr>
                <th>ID</th><th>CNE</th><th>Nom</th><th>Prénom</th>
                <th>Email</th><th>Filière</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($etudiants as $e): ?>
            <tr>
                <td><?php echo (int)$e['id']; ?></td>
                <td><?php echo htmlspecialchars($e['cne'], ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?php echo htmlspecialchars($e['nom'], ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?php echo htmlspecialchars($e['prenom'], ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?php echo htmlspecialchars($e['email'], ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?php echo htmlspecialchars($e['filiere_code'] . ' — ' . $e['filiere_libelle'], ENT_QUOTES, 'UTF-8'); ?></td>
                <td>
                    <a href="/etudiants/<?php echo (int)$e['id']; ?>">Voir</a>
                    <a href="/etudiants/<?php echo (int)$e['id']; ?>/edit">Éditer</a>
                    <form action="/etudiants/<?php echo (int)$e['id']; ?>/delete" method="post" style="display:inline" onsubmit="return confirm('Supprimer ?');">
                        <button type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <?php
    $base = '/etudiants?size=' . (int)$size . '&page=';
    ?>
    <nav class="pagination">
        <?php if ($page > 1): ?><a href="<?php echo $base . ($page-1); ?>">« Préc.</a><?php endif; ?>
        <?php for ($p = 1; $p <= $totalPages; $p++): ?>
            <a href="<?php echo $base . $p; ?>" <?php echo $p == $page ? 'aria-current="page"' : ''; ?>><?php echo $p; ?></a>
        <?php endfor; ?>
        <?php if ($page < $totalPages): ?><a href="<?php echo $base . ($page+1); ?>">Suiv. »</a><?php endif; ?>
    </nav>
<?php endif; ?>