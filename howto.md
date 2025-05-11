When you run into the error

```bash
error: The following untracked working tree files would be overwritten by merge:
        wp-content/plugins/kubio/LICENSE.txt
        wp-content/plugins/kubio/build/admin-area/index.asset.php
```

it means that Git detected files in your working directory that aren't tracked by Git but will be created or updated by the merge. Git stops the pull to protect these files from being unexpectedly removed.

There are two main approaches to force your local directory to match the repository’s state:

---

### **Option 1: Discard All Local Changes Including Untracked Files**

**WARNING:** This method is destructive. You will **lose any local changes** or untracked files that are not yet committed, so be sure you really want to do this.

1. **Fetch the Latest Changes:**

   ```bash
   git fetch origin
   ```

2. **Reset Your Current Branch to Match the Remote:**

   Replace `<branch>` with your branch name (often `master` or `main`):

   ```bash
   git reset --hard origin/<branch>
   ```

3. **Clean Up Untracked Files and Directories:**

   This command removes all untracked files (and directories if needed):

   ```bash
   git clean -fd
   ```

After these steps, your working directory will exactly mirror the state of the remote repository.

---

### **Option 2: Stash Local Changes (Including Untracked Files) Before Pulling**

If you wish to preserve your local changes (even if you plan to discard them later or inspect them), you can stash them first. Note that stashing untracked files requires an extra flag:

1. **Stash with Untracked Files:**

   ```bash
   git stash --include-untracked
   ```

2. **Now Pull the Latest Changes:**

   ```bash
   git pull
   ```

3. **(Optional) View Your Stashed Changes:**

   If needed, you can list and later apply or drop your stashed changes:

   ```bash
   git stash list
   # To apply:
   git stash apply stash@{0}
   # To drop:
   git stash drop stash@{0}
   ```

*Note:* If your stash contains changes that conflict with the incoming remote changes, you should inspect them before reapplying or decide to drop them altogether.

---

### **Key Considerations**

- **Tracked vs. Untracked Files:**  
  Git commands such as `git reset --hard` only affect tracked files. Untracked files (like your `LICENSE.txt` in this case) won’t be removed, which is why `git clean -fd` is necessary.

- **Destructive Nature:**  
  Both methods can lead to data loss if you haven't backed up or committed your local modifications. Double-check before running these commands.

- **Forced Pull Options:**  
  There isn’t a direct flag like `git pull --force` that will override untracked files automatically. The approach above is the standard safe practice recommended by Git.

By following either of these approaches, you should be able to align your local workspace fully with the remote repository while handling the untracked file conflict nicely. 

---

If you're steered by a desire to understand your Git repository's state before wiping out your changes, you might consider using visual tools or commands like `git status` or even backing up your current directory before executing these commands. 

---
The output of your `git log origin/main..HEAD` command is already showing you which commits are ahead of the remote branch. In your case, you have two commits pending push:

1. **Merge Commit (c7f40fa6...)**  
   This commit is the merge commit that results from merging changes from the remote repository with your local branch. It has two parent commits—one from your local work (commit 89480703) and one that likely represents the remote branch (d84df94a).

2. **Commit (89480703...)**  
   This commit represents an earlier change (with the message "chmod").

In essence, if you execute a `git push`, both of these commits will be pushed to `origin/main`.

### Additional Ways to Inspect Commits

- **Condensed Log:**  
  For a shorter, one-line summary of each commit, run:  
  ```bash
  git log --oneline origin/main..HEAD
  ```
  
- **Graphical View:**  
  To see a simple visual representation of your branch history, use:  
  ```bash
  git log --graph --decorate --oneline origin/main..HEAD
  ```
  
- **Using git cherry:**  
  The command below lists commits that exist on your local branch but not on the remote tracking branch. Each commit is prefixed with a `+`, indicating it will be pushed:  
  ```bash
  git cherry -v
  ```

- **Viewing the Combined Diff:**  
  If you want to review the cumulative changes that these commits introduce compared to the remote branch, you can execute:  
  ```bash
  git diff origin/main
  ```

### What to Expect When Pushing

When you run `git push`, Git will send both the merge commit and the "chmod" commit to the remote repository. The merge commit effectively registers that you have reconciled differences between your branch and the remote, ensuring that both sets of changes (yours and the remote's) are now combined in your local history. 

These techniques let you feel confident about what changes you're about to publish and give you the control to review any alterations before they become part of the remote history.

---
You can simply compare your current branch (HEAD) with the remote tracking branch using the following command:

```bash
git log origin/main..HEAD
```

This command will list all the commits that exist in your local branch but not in `origin/main`. If you prefer a condensed view, you can use the `--oneline` option:

```bash
git log --oneline origin/main..HEAD
```

Another useful tool is:

```bash
git cherry -v
```

This will display the commits that are unique to your branch as compared to the remote, each marked with a `+` to indicate they're pending to be pushed.

These commands help you verify exactly which commits will be pushed to the remote repository, ensuring that you have a clear understanding of the differences between your local branch and `origin/main`. 

If you're interested, you might also explore graphical tools like `gitk origin/main..HEAD` or using `tig` for a more visual representation of the commit history.
