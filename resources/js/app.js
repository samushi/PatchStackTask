import "./bootstrap";

const onDeleteBtn = async (url) => {
    if (confirm("Are you sure?")) {
        const onDeleted = await window.axios.delete(url);
        if (onDeleted.status === 200) window.location.reload();
    }

    return false;
};

window.onDeleteBtn = onDeleteBtn;
