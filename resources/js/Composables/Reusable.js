const currentNumberId = (num) =>  '000' + num;
const currentActiveState = (sts) => sts ? 'Activo' : 'Inactivo';
const currentUnfinishied = (sts) => sts === null ? 'En curso' : sts;

export { currentNumberId, currentActiveState, currentUnfinishied }